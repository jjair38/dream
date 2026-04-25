import type { Metadata } from 'next';
import { Inter, Playfair_Display } from 'next/font/google';
import './globals.css';

const inter = Inter({
  subsets: ['latin'],
  variable: '--font-sans',
});

const playfair = Playfair_Display({
  subsets: ['latin'],
  variable: '--font-serif',
});

export const metadata: Metadata = {
  title: 'Rocco BBQ | O Verdadeiro Churrasco Texano em Jarinu',
  description: 'Burgers artesanais, ingredientes selecionados e uma experiência que vai além do sabor em Jarinu - SP.',
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="pt-BR" className={`${inter.variable} ${playfair.variable}`}>
      <body suppressHydrationWarning className="bg-black text-white antialiased">
        {children}
      </body>
    </html>
  );
}
