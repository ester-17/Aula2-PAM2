namespace Etec.Calculadora.Projeto
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine(Somar(10,20));
            Console.WriteLine(Somar(-10, -20));
            Console.WriteLine(Somar(-10, 20));
            Console.WriteLine(Subtrair(20, 10));
            Console.WriteLine(Multiplicar(20, 10));
            Console.WriteLine(Dividir(20, 10));
        }

        static double Somar(double x, double y)
        {
            return x + y;
        }

        static double Subtrair(double x, double y)
        {
            return x - y;
        }

        static double Multiplicar(double x, double y)
        {
            return x * y;
        }

        static double Dividir(double x, double y)
        {
            return x / y;
        }
    }
}
